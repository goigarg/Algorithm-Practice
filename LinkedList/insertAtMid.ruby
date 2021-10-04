class Node
    attr_accessor :data, :next

    def initialize data
        @data = data
        @next = nil
    end
end

class LinkedList
    attr_accessor :head

    def initialize
        @head = nil
    end
    def add data
        unless @head
            @head = Node.new data
        else
            temp = @head
            @head = Node.new data
            @head.next = temp
        end
    end

    def insert data, position
        if position == 0
            #add at head
            add(data)
        else
            #add at position
            ptr = @head
            (position-1).times do |i|
                ptr = ptr.next
            end
            current = ptr
            nxt = current.next
            temp = Node.new data

            current.next = temp
            temp.next = nxt
        end
    end


    def printList
        unless @head
            puts "Linked list is Empty"
            return
        end
    
        temp = @head

        while temp
            print "#{temp.data} -> "
            temp = temp.next
        end
        puts ""
        return
    end
end

list = LinkedList.new


5.times do |i|
    list.add i
end


list.insert(9, 2)

list.printList
