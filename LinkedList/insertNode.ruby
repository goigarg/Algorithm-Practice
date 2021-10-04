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
        if @head == nil
            @head = Node.new(data)
        else
            temp = @head
            @head = Node.new(data)
            @head.next = temp
        end
    end
    def print
        if @head == nil
            puts "Linked List is empty"
        else
            temp = @head
            while(temp)
                puts temp.data
                temp = temp.next
            end
        end
    end
    def insert data, n
        p = @head
        p = p.next
        node = Node.new(data)
        node.next = p.next
        
    end
end


list = LinkedList.new

for i in 0..5
    list.add(i)
end

list.insert(100, 2)

list.print