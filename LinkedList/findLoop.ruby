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

    def findLoop
        arr = []
        temp = @head
        pos = 0

        while temp
            

            if(arr.include? temp)
                puts "Loop found on position #{pos} value "
                return
            end
            arr.push temp
            temp = temp.next
            pos += 1

        end
        return -1
    end

    def printList
        unless @head
            puts "Linked list is Empty"
        
        else
            temp = @head
            count = 0
            while temp
               print "#{temp.data} -> "
               temp = temp.next
               count+=1
               if count > 100
                    break
               end
            end
        end
        puts ""
    end
end


list = LinkedList.new


5.times do |i|
    list.add i
end
list.printList

list.head.next.next.next = list.head


list.findLoop